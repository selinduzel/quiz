<x-app-layout>
    <x-slot name="header">{{ $quiz->title }}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group">

                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Son Katılım Tarihi
                            <span title="{{$quiz->finished_at}}" class="btn btn-secondary btn-pill">{{ $quiz->finished_at != '' ? $quiz->finished_at->diffForHumans() : 'Tarih yok' }}</span>
                        </li>
                      
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Soru Sayısı
                            <span class="btn btn-secondary btn-pill">{{$quiz->questions_count}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Katılımcı Sayısı
                            <span class="btn btn-secondary btn-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Ortalama Puan
                            <span class="btn btn-secondary btn-pill">60</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    {{ $quiz->description }}</p>
                    <a href="{{route('quiz.join',$quiz->slug)}}" class="btn btn-primary btn-block btn-sm">Quiz'e Katıl</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
