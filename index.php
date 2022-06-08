<?php
include 'php/list_patients.php';
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="dist/output.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="h-full ">
    <div class="w-20 h-10 flex items-center"></div>

    <div class="h-10 flex items-center justify-between ">

        <p class="font-body, font-bold text-2xl ml-12">Pacientes</p>

        <button type="reset" id="adicionar" class="flex items-center justify-center font-body, font-bold text-xs border-solid border-2 border-aside bg-whites rounded-[5px] w-[105px] h-[35px] mr-[29px] hover:bg-white">
            <img class='p-1' src="icons/user-add.svg">Adicionar</button>
    </div>

    <div class="flex justify-center items-center relative top-[20px]">
        <input class="h-16 w-full ml-[70px] mr-[70px] border-solid border-2 rounded-[5px] pl-4 bg-inp outline-0 " type="search" name="" id="search" placeholder="Procurar pacientes">
        <button class="absolute right-[110px]" onclick="Search()"><img src="icons/search-normal.svg"></button>
    </div>

    <!-- Tabela de Pacientes -->
        <div class="w-full h-1/4 flex justify-center relative top-10">
            <table class="w-full ml-[70px] mr-[70px] bg-white text-left">
            <thead>
                    <tr class="h-10 bg-slate-300">
                        <th class="pl-3 ">Nome</th>
                        <th>CPF</th>
                        <th>Celular</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="p-5 divide-y-[1px] divide-solid divide-zinc-500 ">
                    <?php echo $ls ?>
                </tbody>
            </table>
        </div>
    <?php include 'default_modal.php'; ?>
    <?php include 'modals/delete_modal.php'; ?>
    <?php include 'modals/add_modal.php'; ?>
    <?php include 'modals/edit_modal.php'; ?>

    <script src="scripts/modal.js"></script>
    <script src="scripts/jquery-mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#Ecpf").mask("000.000.000-00");
            $("#Ecelular").mask("(00)00000-0000")
        });
    </script>

</body>

</html>