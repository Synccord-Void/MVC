document.addEventListener('DOMContentLoaded', () => {

    const tables = {
        ModalForm: class {
            constructor(modal, table, form, saveButton, fields, storageKey) {
                this.modal = modal;
                this.table = table;
                this.form = form;
                this.saveButton = saveButton;
                this.fields = fields;
                this.storageKey = storageKey;
                this.participants = [];

                this.initialize();
            }

            initialize() {
                this.loadLocal();

                document.getElementById(this.saveButton).addEventListener("click", () => {
                    const formData = this.getFormData();
                    const nights = this.calculateNights(formData);

                    this.addRow(formData, nights);
                    this.participants.push({ ...formData, nights });

                    this.jsonupdate();
                    this.saveLocal();
                    this.hideModal();
                    this.resetForm();
                });
            }

            getFormData() {
                const formData = {};
                this.fields.forEach(field => {
                    formData[field] = document.getElementById(field).value;
                });
                return formData;
            }

            calculateNights(formData) {
                const arrival = Date.parse(formData['modal-arrival']);
                const departure = Date.parse(formData['modal-departure']);
                let nights = "*invalid*";
                if (!isNaN(arrival) && !isNaN(departure)) {
                    nights = Math.ceil((departure - arrival) / (1000 * 60 * 60 * 24));
                }
                return nights;
            }

            addRow(formData, nights) {
                const tbody = document.querySelector(`#${this.table} tbody`);
                const newRow = document.createElement("tr");

                let rowContent = '';
                this.fields.forEach(field => {
                    rowContent += `<td>${formData[field]}</td>`;
                });
                rowContent += `<td>${nights}</td>`;
                rowContent += `<td><button class="btn btn-danger btn-sm delete-row">Löschen</button></td>`;

                newRow.innerHTML = rowContent;
                tbody.appendChild(newRow);

                newRow.querySelector(".delete-row").addEventListener("click", () => {
                    newRow.remove();
                    this.deleteParticipant(formData);
                    this.jsonupdate();
                    this.saveLocal();
                });
            }

            jsonupdate() {
                document.getElementById('participantData').value = JSON.stringify(this.participants);
            }

            saveLocal() {
                localStorage.setItem(this.storageKey, JSON.stringify(this.participants));
            }

            loadLocal() {
                const savedData = JSON.parse(localStorage.getItem(this.storageKey)) || [];
                savedData.forEach(participant => {
                    this.addRow(participant, participant.nights);
                    this.participants.push(participant);
                });
                this.jsonupdate();
            }

            deleteParticipant(formData) {
                this.participants = this.participants.filter(p => {
                    return Object.keys(formData).some(key => formData[key] !== p[key]);
                });
            }

            hideModal() {
                const modal = bootstrap.Modal.getInstance(document.getElementById(this.modal));
                modal.hide();
            }

            resetForm() {
                document.getElementById(this.form).reset();
            }
        }
    };

    new tables.ModalForm("participantModal", "table-Group", "participantForm", "saveParticipant", [
        "firstName", "lastName", "age", "member", "modal-arrival", "modal-departure"
    ], "participantsData");
});
