    let form = document.getElementById('signup');
    let loginForm = document.querySelector('#signin')
   // const httpRequest = new XMLHttpRequest();

   //login Authentication
   loginForm.onsubmit = (event) =>{
    event.preventDefault();
    form = document.querySelector('#signin')
    const loginDataObject = {
        "username": form.username.value,
        "password": form.password.value,
    }
    console.log(loginDataObject);
    makeRequest('actions.php?a=login_user', JSON.stringify(loginDataObject));

   }


   //signup Authentication
    form.onsubmit = (event) =>{
        window.localStorage.clear();
        event.preventDefault();
        const form = document.querySelector('#signup');
        const dataObject = {
            "username": form.username.value,
            "email": form.email.value,
            "phoneNo":form.phoneNo.value,
            "password": form.pwd.value
        }
        
        //console.log(JSON.stringify(dataObject))
        //const userName = form.username.value 
        makeRequest('actions.php?a=save_viewer', JSON.stringify(dataObject));
    }

    function makeRequest(url, formData) {
        httpRequest = new XMLHttpRequest();
        if (!httpRequest) {
            alert("Giving up :( Cannot create an XMLHTTP instance");
            return false;
        }

        httpRequest.onreadystatechange = alertContents;
        httpRequest.open('POST', url);
        httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        httpRequest.send(`formData=${encodeURIComponent(formData)}`);
    }
    function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
        if (httpRequest.status === 200) {
        const response = JSON.parse(httpRequest.responseText);
        document.querySelector('.signupModal').style.display = 'none';
        document.querySelector('.loginModal').style.display = 'none'
        //localStorage("login_status":response.login_status, "username":response.userName);
        alert(response.computedString);

        window.localStorage.setItem("user_name", response.userName);
        window.localStorage.setItem("login_status", response.login_status);
        //alert(window.localStorage.user_name)
   
        } else {
        alert('There was a problem with the request.');
        }
    }
    }

