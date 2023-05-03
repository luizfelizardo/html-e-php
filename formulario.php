<!DOCTYPE html>

<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário </title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to right, rgb(232, 236, 239), rgb(226, 233, 237));
    }

    .box {
        color: rgb(32, 31, 31);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-45%, -45%);
        background-color: rgba(162, 184, 155);
        padding: 15px;
        border-radius: 15px;
        width: 50%;
    }

    fieldset {
        border: 3px solid rgb(219, 224, 228);
    }

    legend {
        border: 1px solid rgb(128, 134, 141);
        padding: 9px;
        text-align: center;
        background-color: rgb(214, 218, 222);
        border-radius: 8px;
    }

    .inputBox {
        position: relative;
    }

    .inputUser {
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: rgb(20, 20, 20);
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }

    .labelInput {
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }

    .inputUser:focus~.labelInput,
    .inputUser:valid~.labelInput {
        top: -18px;
        font-size: 12px;
        color: rgb(113, 133, 152);
    }

    #data_nascimento {
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }

    #submit {
        background-image: linear-gradient(to right, rgb(22, 22, 22), rgb(182, 175, 193));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }

    #submit:hover {
        background-image: linear-gradient(to right, rgb(147, 160, 175), rgb(174, 170, 181));
    }
    </style>
</head>

<body>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Fórmulário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Série:</p>
                <input type="radio" id="1º ano" name="série" value="1º ano" required>
                <label for="1º ano">1º ano</label>
                <br>
                <input type="radio" id="2º ano" name="série" value="2º ano" required>
                <label for="2º ano">2º ano</label>
                <br>
                <input type="radio" id="3º ano" name="série" value="3º ano" required>
                <label for="3º ano">3º ano</label>
                <br>
                <input type="radio" id="4º ano" name="série" value="4º ano" required>
                <label for="4º ano">4º ano</label>
                <br>
                <input type="radio" id="5º ano" name="série" value="5º ano" required>
                <label for="5º ano">5º ano</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="endereço" id="endereço" class="inputUser" required>
                    <label for="endereço" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Estado" id="Estado" class="inputUser" required>
                    <label for="Estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">

            </fieldset>
        </form>

    </div>
</body>


</html>