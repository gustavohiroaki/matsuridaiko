<main class="dash-container">
<h2>Cadastro de Eventos</h2>

<form id="input-member" name="input-member">
    <div class="row">
        <div class="input-field col l12 m12 s12">
            <label for="name_event">Nome do Eventos</label>
            <input type="text" id="name_event" name="name_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="date_init">Data do Início do evento</label>
            <input class="datepicker" type="text" id="date_init" name="date_init">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="hour_init">Horário do Início do evento</label>
            <input class="timepicker" type="text" id="hour_init" name="hour_init">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="date_fin">Data do Final do evento</label>
            <input class="datepicker" type="text" id="	date_fin" name="date_fin">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="hour_fin">Horário do Final do evento</label>
            <input class="timepicker" type="text" id=" hour_fin" name="hour_fin">
        </div>

        <input type="hidden" name="dateinit_event">
        <input type="hidden" name="datefin_event">

        <div class="input-field col l12 m12 s12">
            <label for="zip_event">CEP</label>
            <input type="text" id="zip_event" name="zip_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="state_event">Estado</label>
            <input type="text" id="state_event" name="state_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="city_event">Cidade</label>
            <input type="text" id="city_event" name="city_event">
        </div>
        
        <div class="input-field col l12 m12 s12">
            <label for="neighboorhood_event">Bairro</label>
            <input type="text" id="neighboorhood_event" name="neighboorhood_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="street_event">Rua</label>
            <input type="text" id="street_event" name="street_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="complement_event">Complemento</label>
            <input type="text" id="complement_event" name="complement_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="annotation_event">Anotações</label>
            <input type="text" id="annotation_event" name="annotation_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="responsible_event">Responsável</label>
            <input type="text" id="responsible_event" name="responsible_event">
        </div>

        <div class="input-field col l12 m12 s12">
            <label for="status_event">Status</label>
            <input type="text" id="status_event" name="status_event">
        </div>


        <input type="submit" class="btn" value="Enviar">

    </div>
</form>

</main>