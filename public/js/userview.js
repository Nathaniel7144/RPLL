// This script contains how user is displayed in view

class UserView {
    // Setting username, avatar
    TITLEANDPHOTO = {
        "Doctor": {
            "title": "Dr. "
        },
        "Nurse": {
            "title": "Nurse "
        },
        "General": {
            0: {
                "title": "Mr. "
            },
            1: {
                "title": "Ms. "
            }
        }
    }

    ASSET = "/img/";
    name = '';
    gender = '';
    position = '';
    isundefined = true;

    constructor(user) {
        if (user !== undefined) {
            for (let attr in user) { this[attr] = user[attr] }
            this.isundefined = false;
            this.generalizePosition();
        }
    }

    generalizePosition() {
        // function to change admin/HR/Cashier -> General
        this.position = (
            !(this.position === "Doctor" || this.position === "Nurse")
        ) ?
            "General" : this.position;
    }

    getTitle() {
        // Mr., Ms., ...
        return this.getDataByPositionGender()["title"];
    }

    getDataByPositionGender() {
        // Access TITLEANDPHOTO tree
        return (this.position === "General") ?
            this.TITLEANDPHOTO[this.position][this.gender] :
            this.TITLEANDPHOTO[this.position];
    }

    // that one that's called from classes
    displayUsername() {
        // method to display username if user has provided email
        if (!this.isundefined) {
            $("#user__name").text(
                this.getTitle() + this.name
            );
        }
    }

    // that one that's called from classes
    setAvatar() {
        // method that will set avatar
        if (!this.isundefined) {
            $("#user__avatar__img").attr(
                "src", this.ASSET + this.position.toLowerCase() +
                "_" + ((this.gender === 0) ? "male" : "female") + ".jpg"
            );
        }
    }
}