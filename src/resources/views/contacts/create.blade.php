<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body class="antialiased">
        <section class="text-gray-600 body-font relative">
            <div class="container py-5 mt-5 mx-auto">
                <div class="text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl title-font">お問合せ</h1>
                </div>
                <form method="post" action="{{ route('store') }}">
                @csrf
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="department_id" class="leading-7 text-sm text-gray-600">部署名</label>
                        <select name='department_id'>
                            <option value="">選択してください</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">お名前</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                    </div>
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="content" class="leading-7 text-sm text-gray-600">お問合せ内容</label>
                        <textarea id="content" name="content" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                    </div>
                    </div>
                    <div class="p-2 w-full">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="age">
                            年齢
                        </label>
                        <input class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" id="age" type="text">
                    </div>
                    <div class="p-2 w-full">
                    <div class="relative">
                        <label for="gender" class="leading-7 text-sm text-gray-600">性別</label><br />
                        <input type="radio" name="gender" value="0" >男性
                        <input type="radio" name="gender" value="1" >女性
                        <input type="radio" name="gender" value="2" >未回答
                    </div>
                    </div>
                    <div class="p-2 w-full">
                    <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">提出</button>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </section>
    </body>
</html>
