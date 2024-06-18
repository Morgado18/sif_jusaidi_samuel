<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body {
            background: linear-gradient(90deg, #ffffff, #ffffff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .login-container {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            display: flex;
            overflow: hidden;
            max-width: 900px;
            width: 100%;
        }
        .login-container .image-section {
            background: url('img/medium-shot-male-flight-attendant-posing.jpg') no-repeat center center;
            background-size: cover;
            flex: 1;
            position: relative;
        }
        .login-container .image-section::after {
            content: '';
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .login-container .form-section {
            flex: 1;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #f8f9fa;
            color: #333;
        }
        .form-section h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
        }
        .btn-primary {
            border-radius: 30px;
            padding: 10px 20px;
            background: #7f5df5;
            border: none;
            width: 100%;
        }
        .additional-links {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }
        .additional-links a {
            color: #7f5df5;
            text-decoration: none;
        }
        .header {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            text-align: center;
            color: #fff;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="image-section">
            <div class="header">
                Bem-Vindo!!!
            </div>
        </div>
        <div class="col-lg-5">
            <div class="container">
                <div class="form-container">
                    <h2 class="text-center" style="color:black;">Cadastrar</h2>
                    <form action="{{ route('main.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user" style="color: #333;"></i></span>
                            </div>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock" style="color: #333;"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-lock" style="color: #333;"></i></span>
                            </div>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirme a Senha" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope" style="color: #333;"></i></span>
                            </div>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required autocomplete="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tag" style="color: #333;"></i></span>
                            </div>
                            <select class="form-control" id="tipo" name="tipo" onchange="showFields()" required>
                                <option value="">Selecione...</option>
                                <option value="empreendedor">Empreendedor</option>
                                <option value="investidor">Investidor</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <div class="addField"></div>

                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        @include('sweetalert::alert')
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showFields() {
            var tipo = document.getElementById('tipo').value;
            $('.addField').html('');
            if (tipo === 'investidor') {
                let groupFields = `
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone" style="color: #333;"></i></span>
                        </div>
                        <input type="text" class="form-control" name="contactoinvestidor" placeholder="Contato do Investidor">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-business-time" style="color: #333;"></i></span>
                        </div>
                        <input type="text" class="form-control" name="areasDeInteresseDeInvestimento" placeholder="Áreas de Interesse de Investimento">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-file-invoice-dollar" style="color: #333;"></i></span>
                        </div>
                        <textarea class="form-control" name="historicoDeInvestimento" placeholder="Histórico de Investimento"></textarea>
                    </div>
                `;
                $('.addField').append(groupFields);
            } else if (tipo === 'empreendedor') {
                let groupFields = `
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone" style="color: #333;"></i></span>
                        </div>
                        <input type="text" class="form-control" name="contactoempreendedor" placeholder="Contato do Empreendedor" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-history" style="color: #333;"></i></span>
                        </div>
                        <textarea class="form-control" name="hestoricoDeEmpreendedorismo" placeholder="Histórico de Empreendedorismo" required></textarea>
                    </div>
                `;
                $('.addField').append(groupFields);
            }
        }
    </script>
</body>
</html>
