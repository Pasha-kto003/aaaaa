<h1>Новости сайта</h1>
<div class="container flex-wrap d-flex p-10 ai-center" style="justify-content: center">
    <?php
    for ($i = 0; $i < 6; $i++):
    ?>
        <div class="card m-10" style="width: 24%; margin: 10px; text-align: left ">
            <div class="card-body">

                <h5 class="card-title">Название новости</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Новость</p>
                <a href="#" class="btn btn-primary">Ссылка на полную новость</a>
            </div>
        </div>
    <?php
    endfor;
    ?>
</div>

