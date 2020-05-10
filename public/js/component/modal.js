class Modal {

    MODALS_COLLECTION = {
        search: {
            patient: {
                title: "Search Patient",
                content:
                    `
                        <form>
                            <div class="form-group">
                                <label for="patient">Patient:</label>
                                <input type="text" class="form-control" placeholder="Patient Name">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="male">
                                    <label class="custom-control-label" for="male">Male</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="female">
                                    <label class="custom-control-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bday">Birthday:</label>
                                <input type="date" class="form-control">
                            </div>
                        </form>
                    `
                ,
                buttons: ['Search', 'Cancel']
            }
        }
    }

    constructor(){
        importStyle('components/modal.css');
    }

    create(data, size) {
        let modal = `
            <div class="modal fade" id="${data.id}">
                <div class="modal-dialog modal-${size} modal-dialog-centered">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">${data.title}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                    ${data.content}
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <div class="btn-group-vertical">
                            ${this.createButtons(data.buttons)}
                        </div>
                    </div>
                    
                </div>
                </div>
            </div>    
        `;
        return modal;
    }

    createButtons(buttons) {
        let htmlButtons = '';
        for (let btn of buttons) {
            let htmlButton = '<button type="button" class="btn btn-modal btn-modal-custom btn-secondary" data-dismiss="modal">Cancel</button>';
            if (btn !== 'Cancel') {
                htmlButton = `<button type="button" class="btn btn-modal btn-modal-custom btn-success" data-dismiss="modal">${btn}</button>`;
            }
            htmlButtons += htmlButton;
        }
        return htmlButtons;
    }

    embed(modal) {
        $("body").append(modal);
    }

    createFromCollection(labels, id, size = 'lg') {
        if (labels !== undefined) {
            let modalData = this.MODALS_COLLECTION[labels.general][labels.specific];
            modalData["id"] = id;

            this.embed(this.create(modalData, size));
        }
    }
}