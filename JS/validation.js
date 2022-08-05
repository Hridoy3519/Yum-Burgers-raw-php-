function formValidate() {

    console.log('Hello');
    let error = "";
    /* validation of first name last name */
    // const firstName = document.getElementById("fname").value;
    // const lastName = document.getElementById("lname").value;
    const fullName = document.getElementById("name").value;
    const regaxName = /[a-zA-Z][A-Za-z 0-9]{6,40}/g
    //console.log(fullName.match(regaxName).join(''))
    if (!(fullName.match(regaxName)?.join('') == fullName)) error = "Name should only contain characters & digits and should be atleast 6 character long";

    // Mobile Number validation
    const number = document.getElementById('mobile').value;
    const regaxNumber = /(\+88)?-?01[3-9][0-9]{8}/g
    //console.log(number.match(regaxNumber)?.join(''))
    if (!(number.match(regaxNumber)?.join('') == number)) error = "Give a Valid Mobile Number!";

    // Email validation
    const email = document.getElementById('email').value;
    const regaxEmail = /(cse|llb|bba)_[0-9]{10}@lus\.ac\.bd/g;

    if (!(email.match(regaxEmail)?.join('') == email)) error = "Only valid Leading University email is accepted";


    //Password validation
    const pass = document.getElementById('password').value;
    const cpass = document.getElementById('cpassword').value;
    if (pass == cpass) {
        const regpass = /(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}/
        if (!(pass.match(regpass)?.join('') == pass)) error = "Password should contain a Uppercase letter, 1 digit, 1 special case letter & should be 8 characters long";
    }
    else {
        error = "Password & confirm password do not match"
    }

    document.getElementById('par').innerHTML = error;

    if (error) return false;
    else true;
}