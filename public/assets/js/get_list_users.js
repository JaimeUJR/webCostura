const tbody = document.getElementById("tbody")

async function get_list_users () {
    try {
        const resFetch = await fetch("../../controllers/user_controller.php?get_list_user") // Request
        
        const users = resFetch.json();

        let row = "";

        console.log(users)
    } catch (error) {   
        console.log(error)
    }
}

get_list_users();