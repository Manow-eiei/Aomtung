<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/46d84e83e2.js" crossorigin="anonymous"></script>
<script src="includes/jquery-3.6.4.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- 
/// cdn graph -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.3/components/charts/chart-5/assets/css/chart-5.css">

<style>
body {
    background: whitesmoke;
    font-family: 'Open Sans', sans-serif;
}

.container {
    max-width: 960px;
    margin: 30px auto;
    padding: 20px;
}

h1 {
    font-size: 20px;
    text-align: center;
    margin: 20px 0 20px;

    small {
        display: block;
        font-size: 15px;
        padding-top: 8px;
        color: gray;
    }
}

.avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 50px auto;

    .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;

        input {
            display: none;

            +label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all .2s ease-in-out;

                &:hover {
                    background: #f1f1f1;
                    border-color: #d6d6d6;
                }

                &:after {
                    content: "\f040";
                    font-family: 'FontAwesome';
                    color: #757575;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    margin: auto;
                }
            }
        }
    }

    .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);

        >div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
}

.custom-frame {
    background-color: #F4F4F4;
    padding: 15px;
    border-radius: 10px;
}

.input-group-seperator {
    width: 2rem;
    margin-left: 0.75rem;
    margin-right: 0.75rem;
    height: 0.3rem;
    background: #ced4da;
    border-radius: 0.1rem;
}

.custom-radio {
    color: #81C8E4;
    border-color: #81C8E4;
    transition: background-color 0.3s;
}

.custom-radio.active-color-1 {
    background-color: transparent;
    border-color: #81C8E4;
    color: #81C8E4;
}

.custom-radio.active-color-2 {
    background-color: #FF8686;
    border-color: #FF8686;
    color: white;
}


.btn-pink {
    background: linear-gradient(90deg, #FF8686 33.4%, #FF8686 96.4%);
    color: white;
}

.text-pink {
    color: #FF8686;
}

.text-darkblue {
    color: #064F6C;
}

.text-lightblue {
    color: #81C8E4;
}

.text-seablue {
    color: #0589BD;
}

.text-darkpink {
    color: #E85757;
}

.text-yellow {
    color: #E3C529;
}

.text-red {
    color: #DF4D4D;
}

.otp-input {
    width: 40px;
    height: 40px;
    text-align: center;
    margin: 0 5px;
    border: 1px solid #FF8686;
    border-radius: 5px;
    font-size: 18px;
}

.otp-input:focus {
    outline: none;
    /* ลบเส้นขีดสีน้ำเงินเวลากด focus */
    border-color: #FF8686;
    /* เปลี่ยนสีขอบเป็นชมพูเมื่อ focus */
}




*,
h1,
h2,
h3,
h4,
h5 {
    font-family: 'Prompt', sans-serif;
}
</style>

<!-- font Prompt from google  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">