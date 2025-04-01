<?
// back end
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM  - Locadora de Veículos</title>
    <!-- Link do bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Link dos ícones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Link do css -->
    <link rel="stylesheet" href="style.css"> 
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Barra de informações de usuário -->
         <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                        </span>
                    <!-- Bem vindo,[usuário] -->
                     <span class="welcome-text">
                        Bem-vindo, <strong>Administrador</strong>
                     </span>
                     <!--  -->
                     <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                        <i class="bi bi-box-arrow-right"></i>
                        Sair
                     </a>
                    </div>
                </div>
            </div>
         </div>

         <!-- Formulário para adicionar novos veículos -->
          <div class="row same-height-row">
            
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-header">
                    <h4 class="mb-0">Adicionar novos veículos 🚗</h4>
                </div>
                <div class="card-body">
                    <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="modelo" class="form-label">
                                Modelo:
                            </label>
                            <input type="text" class="form-control" name="modelo" required>
                            <div class="invalid-feedback">
                                Informe um modelo válido!
                            </div>
                        </div>
                        <div class="mb-3">
                        <label for="placa" class="form-label">
                            Placa:
                        </label>
                            <input type="text" class="form-control" name="placa" required>
                            <div class="invalid-feedback">
                                Informe uma placa válida!
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="tipo" class="form-label">
                                Tipo:
                            </label>
                            <select class="form-select" name="tipo" id="tipo" required>
                                <option value="empty" disabled selected> </option>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                                <option value="caminhao">Caminhão</option>
                            </select>
                        </div>
                        <button class="btn btn-success w-100" type="submit" name="adicionar">
                            Adicionar veículo
                        </button>
                     </form>
                </div>    
             </div>
          </div>

          <div class="col-md-6">
            <card class="card h-100">
                <div class="card-header">
                    <h4 class="mb-0">
                        Calcular a previsão de aluguel 💰
                    </h4>
                </div>
                <div class="card-body">
                    <form action="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="tipo" class="input-label">
                                Tipo de veículo:
                            </label>
                            <select name="tipo" class="form-select" required>
                                <option value="carro">Carro</option>
                                <option value="moto">Moto</option>
                                <option value="caminhao">Caminhão</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="quantidade" class="form-label">
                                Quantidade de dias 📆
                            </label>
                            <input type="number" name="dias_calculo" class="form-control" value="1" required>

                        </div>
                    </form>
                </div>
              </div>
            </div>

    </div>

</div>
</body>
</html>