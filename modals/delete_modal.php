<?php include './php/list_patients.php' ?>

<link href="/dist/output.css" rel="stylesheet">

<div class="h-screen w-screen hidden justify-center bg-sei absolute inset-0 z-[99999]" id="modalDelete">

    <div class="h-60 w-[400px] mt-2  bg-white rounded-[5px]">
        <p class="text-center font-light mt-2">Deletar paciente?</p>
        <p class="font-extralight text-center mt-10 p-2">Tem certeza que deseja deleter o registro de <span class="font-bold"></span></p>

        <div class="h-1/2 flex items-center justify-center">
            <button id="cancel" class="w-24 h-8 border-2 border-cancel rounded-[5px] bg-cancel text-white m-1 hover:bg-white hover:border-cancel hover:text-black">Não</button>
            <button id="confirm" class="w-24 h-8 border-2 border-confirm rounded-[5px] bg-confirm text-white m-1 hover:bg-white hover:border-confirm hover:text-black">Sim</button>
        </div>
    </div>

</div>