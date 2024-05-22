document.addEventListener('DOMContentLoaded', function () {

    if (document.getElementById('loginForm')) {
        document.getElementById('loginForm').addEventListener('submit', function (event) {
            console.log(1)
            event.preventDefault();
            let formData = new FormData(this);

            if (!formData.get('email_address').trim() || !formData.get('password').trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill all fields!',
                    showConfirmButton: true,
                    timer: 3000
                });
                return;
            }

            fetch(this.action, {
                method: this.method,
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status) {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Success!',
                            text: data.message,
                            showConfirmButton: true,
                            timer: 1000
                        }).then(() => {
                            setTimeout(() => {
                                window.location.href = data.redirect_to;
                            }, 100);
                        });
                    } else {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Oops...',
                            text: data.message,
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        showConfirmButton: true,
                        timer: 3000
                    });
                });

        });
    }

    if (document.getElementById('registerForm')) {
        document.getElementById('registerForm').addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(event.target);

            if (!formData.get('full_name').trim()
                || !formData.get('passport_number').trim()
                || !formData.get('company_name').trim()
                || !formData.get('job_title').trim()
                || !formData.get('email_address').trim()
                || !formData.get('mobile_number').trim()
                || !formData.get('represent').trim()
                || !formData.get('password').trim()
                || !formData.get('confirm_password').trim()
            ) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill all fields!',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }

            if (formData.get('password').trim() != formData.get('confirm_password').trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Passwords are not the same!',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }


            fetch(this.action, {
                method: this.method,
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status) {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Success!',
                            text: data.message,
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = data.redirect_to;
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Oops...',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                });

        });
    }

    if (document.getElementById('sendPasswordToEmail')) {
        document.getElementById('sendPasswordToEmail').addEventListener('submit', function (event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            console.log(formData);
            if (!formData.get('email_address').trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill email address!',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }

            fetch(this.action, {
                method: this.method,
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status) {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Success!',
                            text: data.message,
                            showConfirmButton: true,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.href = data.redirect_to
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Oops...',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                });
        })
    }

    if (document.getElementById('checkOtp')) {
        document.getElementById('checkOtp').addEventListener('submit', function (event) {

            event.preventDefault();
            const formData = new FormData(event.target);
            if (!formData.get('otp1') || !formData.get('otp2') || !formData.get('otp3') || !formData.get('otp4')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill otp code!',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }

            fetch(this.action, {
                method: this.method,
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status) {
                        location.href = data.redirect_to;
                    } else {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Oops...',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                });
        })
    }

    if (document.getElementById('updatePassword')) {
        document.getElementById('updatePassword').addEventListener('submit', function (event) {

            event.preventDefault();
            const formData = new FormData(event.target);
            if (!formData.get('password') || !formData.get('confirm_password')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Please fill otp code!',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }

            if (formData.get('password') != formData.get('confirm_password')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Passwords are not same!',
                    showConfirmButton: false,
                    timer: 3000
                });
                return;
            }

            fetch(this.action, {
                method: this.method,
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.status) {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Success',
                            text: data.message,
                            showConfirmButton: true,
                        }).then((result) => {
                            if(result.isConfirmed){
                                location.href = data.redirect_to
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: data.icon,
                            title: 'Oops...',
                            text: data.message,
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                })
                .catch(error => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!',
                        showConfirmButton: false,
                        timer: 3000
                    });
                });
        })
    }
});

