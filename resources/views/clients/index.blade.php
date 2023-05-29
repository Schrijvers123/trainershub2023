@foreach ($clients as $client)

    {{ $client->clientname}} - {{ $client->intermediair }} <br>
@endforeach
