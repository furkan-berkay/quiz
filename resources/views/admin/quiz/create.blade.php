<x-app-layout>
    <x-slot name="header">Quiz Oluştur</x-slot>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route('quizzes.store')}}">
                @csrf
                <input type="hidden" name="admin_who_created" value="{{Auth::user()->id}}">
                <div class="mb-3">
                    <label class="form-label">Quiz Başlığı*</label>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Quiz Açıklama</label>
                    <textarea name="description" class="form-control" rows="4">{{old('description')}}</textarea>
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" @if(old('finished_at')) checked @endif type="checkbox" id="isFinished">
                    <label class="form-check-label" for="isFinished">
                        Bitiş Tarihi olacak mı ?
                    </label>
                </div>
                <div class="mb-3" id="finishedInput" @if(!old('finished_at')) style="display: none" @endif>
                    <label class="form-label">Bitiş Tarihi</label>
                    <input type="datetime-local" name="finished_at" id="reqDate" class="form-control" value="{{old('finished_at')}}">
                </div>
                <div class="mb-3 row justify-content-between">
                    <a href="{{ route('quizzes.index') }}" class="btn btn-danger btn-sm w-25">Vazgeç</a>
                    <button type="submit" class="btn btn-success btn-sm w-25">Quiz Oluştur</button>
                </div>
            </form>
        </div>
    </div>
    <x-slot name="js">
        <script>
            $('#isFinished').change(function () {
                if($(this).is(':checked')) {
                    $('#finishedInput').show('slow');
                    $("#reqDate").prop('required',true);
                }
                else {
                    $('#finishedInput').hide('slow');
                    $("#reqDate").prop('required',false);
                }
            });
        </script>
    </x-slot>
</x-app-layout>
