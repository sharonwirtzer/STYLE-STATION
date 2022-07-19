// Elements

const div = document.querySelector('.welcome-user');
const p = document.querySelector('.hello-user');

// Variables

let userName;

// Functions

const getUserName = async () => {

    const data = await $.post('php/get-user-name.php');
    
    if (data) {

        const obj = JSON.parse(data);
        return obj.user;

    }

    return null;

}

const displayUserName = () => {

    p.textContent = 'Hello, ' + userName;
    div.style.display = 'block';

}

const authenticateUser = async () => {

    userName = await getUserName();

    if (userName)
        displayUserName();
    
    else
        location.replace('./login.html');

}

// Run Script

authenticateUser();