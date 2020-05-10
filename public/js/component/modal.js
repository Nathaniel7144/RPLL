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
            },
            'medical record': {
                title: "Search Medical Record",
                content:
                    `
                        <form>
                            <div class="form-group">
                                <label for="bday">Date:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="patient">Patient:</label>
                                <input type="text" class="form-control" placeholder="Patient Name">
                            </div>
                            <div class="form-group">
                                <label for="physician">Physician:</label>
                                <input type="text" class="form-control" placeholder="Physician Name">
                            </div>
                        </form>
                    `
                ,
                buttons: ['Search', 'Cancel']
            },
            employee: {
                title: 'Search Employee',
                content:
                    `
                        <form>
                            <div class="form-group">
                                <label for="id">ID:</label>
                                <input type="text" class="form-control" placeholder="ID">
                            </div>
                            <div class="form-group">
                                <label for="employee">Employee:</label>
                                <input type="text" class="form-control" placeholder="Name">
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
                                <label for="specialist">Specialist:</label>
                                <input type="text" class="form-control" placeholder="Specialist">
                            </div>
                        </form>
                    `
                ,
                buttons: ['Search', 'Cancel']
            },
            product: {
                title: 'Search Product',
                content: `
                <form>
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" placeholder="Product ID">
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                </form>
                `,
                buttons: ['Search', 'Cancel'],
                size: 'md'
            },
            invoice: {
                title: 'Search Invoice',
                content: `
                <form>
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" placeholder="Invoice ID">
                    </div>
                    <div class="form-group">
                        <label for="patient-id">Patient:</label>
                        <input type="text" class="form-control" placeholder="Patient ID">
                    </div>
                </form>
                `,
                buttons: ['Search', 'Cancel'],
                size: 'md'
            }
        },
        result: {
            patient: {
                title: "Search Patient Result",
                content: '',
                buttons: ['Cancel']
            }
        }
    }

    constructor() {
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

    createFromCollection(data, id) {
        if (data !== undefined) {
            let modalData = this.MODALS_COLLECTION[data.general][data.specific];
            modalData["id"] = id;

            let size = 'lg';
            if (modalData.size !== undefined) {
                size = modalData.size;
            }

            if (data.general == 'result') {
                importScript('component/table.js');
                modalData['content'] = new Table().create({
                    head: data.head,
                    contents: data['table content']
                });
            }
            this.embed(this.create(modalData, size));
        }
    }
}