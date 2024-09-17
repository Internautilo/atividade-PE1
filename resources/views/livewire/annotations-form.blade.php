<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Cadastro de Anotações</h3>
    </div>

    <form wire:submit="save">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" placeholder="Digite um email" wire:model="title">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" placeholder="Digite uma descrição" wire:model="description" id="description"></textarea>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center" style="width: 100%">
            <button type="submit" class="btn btn-primary mx-5">Salvar</button>
            <button type="reset" class="btn btn-primary mx-5">Limpar Form</button>
        </div>
    </form>
</div>
