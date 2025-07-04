<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            HOME
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    indexページです。
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- スロット。各ページで共通するヘッダーやナビゲーション等を使いまわす仕様 --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            HOME
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                          <div class="flex flex-col text-center w-full mb-20">
                            <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">お問い合わせ一覧</h1>
                            <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
                          </div>
                          <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                              <thead>
                                <tr>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">お問い合わせ番号</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">性別</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                                  <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">お問い合わせ日時</th>
                                  <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="px-4 py-3">{{$contact->id}}</td>
                                  <td class="px-4 py-3">{{$contact->name}}</td>
                                  <td class="px-4 py-3">{{$contact->gender}}</td>
                                  <td class="px-4 py-3 text-lg text-gray-900">{{$contact->created_at}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                  <td class="border-t-2 border-gray-200 px-4 py-3">Pro</td>
                                  <td class="border-t-2 border-gray-200 px-4 py-3">25 Mb/s</td>
                                  <td class="border-t-2 border-gray-200 px-4 py-3">25 GB</td>
                                  <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$24</td>
                                  <td class="border-t-2 border-gray-200 w-10 text-center">
                                    <input name="plan" type="radio">
                                  </td>
                                </tr>
                                <tr>
                                  <td class="border-t-2 border-gray-200 px-4 py-3">Business</td>
                                  <td class="border-t-2 border-gray-200 px-4 py-3">36 Mb/s</td>
                                  <td class="border-t-2 border-gray-200 px-4 py-3">40 GB</td>
                                  <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$50</td>
                                  <td class="border-t-2 border-gray-200 w-10 text-center">
                                    <input name="plan" type="radio">
                                  </td>
                                </tr>
                                <tr>
                                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">Exclusive</td>
                                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">48 Mb/s</td>
                                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3">120 GB</td>
                                  <td class="border-t-2 border-b-2 border-gray-200 px-4 py-3 text-lg text-gray-900">$72</td>
                                  <td class="border-t-2 border-b-2 border-gray-200 w-10 text-center">
                                    <input name="plan" type="radio">
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                                <td class="px-4 py-3">{{$contact->id}}</td>
                                <td class="px-4 py-3">{{$contact->name}}</td>
                                <td class="px-4 py-3">
                                @if($contact->gender === 0)
                                男性
                                @else
                                女性
                                @endif
                              </svg>
                            </a>
                            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Button</button>
                          </div>
                        </div>
                      </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 