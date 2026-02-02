//variables

let loginCount = 0;             
const siteName = "MyBomma";     
console.log("Site Name:", siteName);
console.log("Login Count:", loginCount);

// Function Declaration
function loginCheck() {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user === "admin" && pass === "1234") {
        alert("Login successful!");

        loginCount++;
        console.log("Login Count Updated:", loginCount);

        window.location.href = "index.html";
        return false;
    } else {
        alert("Invalid username or password");
        return false;
    }
}

// Function Expression
const showMessage = function (msg) {
    console.log("Message:", msg);
};

// Arrow Function
const welcomeUser = (name) => {
    return "Welcome " + name;
};

console.log(welcomeUser("Admin"));
showMessage("Functions executed");

//objects

let userProfile = {
    username: "admin",
    role: "Administrator",
    status: "Active",

    //method inside object
    displayInfo: function () {
        return this.username + " - " + this.role + " (" + this.status + ")";
    },

    updateStatus: function (newStatus) {
        this.status = newStatus;
    }
};

console.log(userProfile);
console.log(userProfile.username);        
console.log(userProfile["role"]);         

userProfile.updateStatus("Logged In");
console.log(userProfile.displayInfo());

//popup boxes

function confirmLogout() {
    let choice = confirm("Do you want to logout?");

    if (choice) {
        alert("Logged out successfully");
    } else {
        alert("Logout cancelled");
    }
}

function askUserName() {
    let name = prompt("Enter your name:");
    if (name) {
        alert("Hello " + name);
    }
}

// events

document.addEventListener("DOMContentLoaded", function () {

    let heading = document.getElementById("mainHeading");
    let btn = document.getElementById("changeBtn");

    if (btn && heading) {
        btn.addEventListener("click", function () {
            heading.textContent = "change cheyyaku bey";
            heading.style.color = "red";
        });

        heading.addEventListener("mouseover", function () {
            heading.style.backgroundColor = "yellow";
        });

        heading.addEventListener("mouseout", function () {
            heading.style.backgroundColor = "transparent";
        });
    }
});

