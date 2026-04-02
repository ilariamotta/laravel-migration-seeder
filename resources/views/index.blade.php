<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-migration-seeder</title>
       @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
   <div class="container py-4">
    <div class="row g-4">
        @foreach ($trains as $train)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="train-ticket h-100">

                    <div class="ticket-top d-flex justify-content-between align-items-center">
                        <span class="ticket-company">{{ $train->company }}</span>
                        <span class="ticket-code">{{ $train->train_code }}</span>
                    </div>

                    <div class="ticket-body">
                        <div class="stations d-flex justify-content-between align-items-center">
                            <div class="station text-start">
                                <div class="station-label">Partenza</div>
                                <div class="station-name">{{ $train->departure_station }}</div>
                                <div class="station-time">
                                    {{ \Carbon\Carbon::parse($train->departure_time)->format('d/m/Y H:i') }}
                                </div>
                            </div>

                            <div class="train-arrow text-center px-3">
                                →
                            </div>

                            <div class="station text-end">
                                <div class="station-label">Arrivo</div>
                                <div class="station-name">{{ $train->arrival_station }}</div>
                                <div class="station-time">
                                    {{ \Carbon\Carbon::parse($train->arrival_time)->format('d/m/Y H:i') }}
                                </div>
                            </div>
                        </div>

                        <div class="ticket-divider"></div>

                        <div class="ticket-info">
                            <div class="info-row d-flex justify-content-between">
                                <span>Carrozze</span>
                                <span>{{ $train->carriages }}</span>
                            </div>

                            <div class="info-row d-flex justify-content-between">
                                <span>Stato</span>
                                <span>
                                    @if ($train->cancelled)
                                        Cancellato
                                    @elseif ($train->in_time)
                                        In orario
                                    @else
                                        In ritardo
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="ticket-footer text-center">
                        Ticket
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>