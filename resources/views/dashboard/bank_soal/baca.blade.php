@extends('layouts.main')
@section('container')
{{-- {{ dd($bank_soal->file_bank_soal) --}}

<iframe height="400" widht="400" src="{{ asset('storage/folder_PDF/'. $bank_soal->file_bank_soal) }}">
</iframe> 

{{-- <div class="row justify-content-center">
    <iframe src="{{ asset('storage/folder_PDF/'. $bank_soal->file_bank_soal) }}" width="50%" height="600">
           
    </iframe>
</div> --}}

{{-- <object data="{{ asset('storage/folder_PDF/'. $bank_soal->file_bank_soal) }}" type="application/pdf">
    <embed src="{{ asset('storage/folder_PDF/'. $bank_soal->file_bank_soal) }}" type="application/pdf" />
  </object> --}}

  <object data="{{ asset('storage/folder_PDF/'. $bank_soal->file_bank_soal) }}" type="application/pdf">
    <div>No online PDF viewer installed</div>
</object>

@endsection