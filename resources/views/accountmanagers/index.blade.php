@foreach ($accountmanagers as $accountmanager)
    {{ $accountmanager->name}} - {{ $accountmanager->email}} - {{ $accountmanager->phone}} - {{ $accountmanager->companyname}} - {{ $accountmanager->title }}<br>
@endforeach
