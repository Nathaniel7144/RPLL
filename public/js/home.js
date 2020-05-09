// Script for home.html. This page can only be entered if user exists

UI_BASED_ON_JOBS = {
    "Doctor": {
        basic: [
            { menu: "Queue", search: "Patient" },
            { menu: "Medical Records", search: "Medical Record" }
        ],
        path: "position_specific/doctor_nurse.js"
    },
    "Nurse": {
        basic: [
            { menu: "Queue", search: "Patient" },
            { menu: "Medical Records", search: "Medical Record" }
        ],
        path: "position_specific/doctor_nurse.js"
    },
    "Customer Service": {
        basic: [
            { menu: "Patient Registration", search: "Patient" },
            { menu: "Queue", search: "Patient" }
        ]
    },
    "HR": {
        basic: [
            { menu: "Employees", search: "Employee" }
        ]
    },
    "Pharmacy": {
        basic: [
            { menu: "Selling", search: "Product" },
            { menu: "Products", search: "Product" }
        ]
    },
    "Cashier": {
        basic: [
            { menu: "Invoices", search: "Invoice" },
            { menu: "Payment History", search: "Invoice" }
        ]
    }
}

selected_menu = -1;

$(document).ready(function () {
    if (getUser() !== null) {
        userView = new UserView(getUser());

        userView.setAvatar();
        userView.displayUsername();

        onHoverProfileText();
        onClickLogoutButton();
        getMenu();
        setSearch();
        onSelectMenu();
        setHomeBasedOnPosition();

    } else {
        redirectTo("/login");
    }
})

function onHoverProfileText() {
    $("#edit-profile").hover(function () {
        $("#avatar__ic_edit").attr('src', "/img/ic_edit_hover.png");
    });

    $("#edit-profile").mouseleave(function () {
        $("#avatar__ic_edit").attr('src', "/img/ic_edit.png");
    });
}

function onClickLogoutButton() {
    $("#ic_logout").click(function () {
        if (confirm("Are you sure you want to logout?")) {
            logout();
            redirectTo("/login");
        }
    })
}

function getMenu() {
    selected_menu = 0;
    isSelected = false;
    for (ui of UI_BASED_ON_JOBS[getUser().position].basic) {
        classname = "nav-link active";
        if (!isSelected) {
            isSelected = true;
        } else {
            classname = "nav-link";
        }

        $("#menu").append(
            `
            <li class="nav-item">
            <a class="${classname}" data-toggle="tab" href="#">${ui.menu}</a>
            </li>
            `
        );
    }
}

function onSelectMenu() {
    $(".nav-link").click(function (e) {
        selected_menu = Array.from($(".nav-link")).indexOf(e.target);
        setSearch();
    })
}

function setSearch() {
    $("#search__box").attr(
        "placeholder",
        `Search ${
            UI_BASED_ON_JOBS[getUser().position].basic[selected_menu]["search"]
        }`
    )
}

function setHomeBasedOnPosition() {
    importScript(UI_BASED_ON_JOBS[getUser().position].path);
}