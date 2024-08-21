<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(177, 154, 126);
            padding: 10px;
            
        }
        input {
            height: 45px;
            width: 200px;
        }
        .container {
            border: solid black 2px;
            height: 500px;
            width: 300px;
            background-color: rgb(177, 154, 126);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;  
            border-radius: 10px;
            padding: 20px;
        }
        .tainer {
            display: flex;
            justify-content: center;
        }
        .modal-btn {
            padding: 10px 14px;
            font-size: 18px;
            display: block;
            min-width: 150px;
            cursor: pointer;
            background-color: #97384b00;
            color: #fff;
            border: none;
            border-radius: 5px;
        }
        .modal-container {
            display: none;
            visibility: hidden;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            transition: visibility 0.4s, opacity 0.4s;
            opacity: 0;
        }
        .modal-container.active {
            display: flex;
            visibility: visible;
            opacity: 1;
            transition: visibility 0s, opacity 0s;
        }
        .modal {
            width: 95%;
            max-width: 500px;
            background: #fff;
            border-radius: 5px;
            position: relative;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .close-modal {
            padding: 8px 10px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            background: #3d3335;
            color: #fff;
        }
        .modal h1 {
            margin-bottom: 10px;
            font-family: Montserrat, sans-serif;
            font-weight: 500;
        }
        .modal p {
            line-height: 1.4;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="tainer">
        <div class="container">
            <div class="header">
                <form action="#">
                    <input type="Em@il" placeholder="Em@il" name="Em@il"><br>
                    <button class="modal-btn" type="button">Envoyer</button> 
                </form>
            </div>
        </div>
    </div>

    <div class="modal-container">
        <div class="modal">
            <button class="close-modal">X</button>
            <h1>Voici du Contenu</h1>
            <p>ihfifhrufheiogffhdufheuhueioeuhfeiueifhefhaehfnvjssfue</p>
        </div>
    </div>

    <script>
        const modalContainer = document.querySelector(".modal-container"); 
        const modalTriggers = document.querySelectorAll(".modal-btn"); 
        const closeModal = document.querySelector(".close-modal"); 

        modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal));
        closeModal.addEventListener("click", toggleModal);

        function toggleModal() {
            modalContainer.classList.toggle("active");
        }
    </script>
</body>
</html>
