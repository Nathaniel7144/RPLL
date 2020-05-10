class Modal {

    MODALS_COLLECTION = {
        search: {
            patient: {
                title: "Search Patient",
                content: 
                    '<input type="text" placeholder="Test">'
                ,
                buttons: ['Search', 'Cancel']
            }
        }
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
                        ${this.createButtons(data.buttons)}
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
            let htmlButton = '<button type="button" class="btn btn-modal btn-secondary" data-dismiss="modal">Cancel</button>';
            if (btn !== 'Cancel') {
                htmlButton = `<button type="button" class="btn btn-modal btn-success" data-dismiss="modal">${btn}</button>`;
            }
            htmlButtons += htmlButton;
        }
        return htmlButtons;
    }

    embed(modal) {
        $("body").append(modal);
    }

    createFromCollection(labels, id, size='lg') {
        let modalData = this.MODALS_COLLECTION[labels.general][labels.specific];
        modalData["id"] = id;

        this.embed(this.create(modalData, size));
    }
}