<div class="card glass" style="width: 18rem;">
    <div class="card-header">
        @yield("company", $train->company)
    </div>
    <ul class="rounded-4 list-group list-group-flush">
        <li class="list-group-item">
            <div class="d-flex">
                <div class="w-50">Partenza:</div>
                <div class="w-50">
                    @yield("departure_station", $train->departure_station)
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="w-50">Arrivo:</div>
                <div class="w-50">
                    @yield("arrival_station", $train->arrival_station)
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="w-50">Ora di partenza:</div>
                <div class="w-50">
                    @yield("departure_time", $train->departure_time)
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="w-50">Ora di arrivo:</div>
                <div class="w-50">
                    @yield("arrival_time", $train->arrival_time)
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="w-50">Codice treno:</div>
                <div class="w-50">
                    @yield("train_code", $train->train_code)
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="d-flex">
                <div class="w-50">Numero carrozze:</div>
                <div class="w-50">
                    @yield("number_of_carriages", $train->number_of_carriages)
                </div>
            </div>
        </li>
    </ul>
</div>