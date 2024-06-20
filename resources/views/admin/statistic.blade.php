<x-admin-layout>
    <x-slot:title>
        Thống kê
    </x-slot:title>
    <div class="tableName my-4">Thống kê</div>   
    <div class="statistic d-flex mb-5">
        <input id="faculty" class="radio" type="radio" name="type" checked>
        <label id="lb-faculty" class="label text-center col-3" for="faculty">Khoa</label>
        
        <input id="gender" class="radio" type="radio" name="type">
        <label id="lb-gender" class="label text-center col-3" for="gender">Giới tính</label>

        <div class="faculty-content sheet">
            <h2>Content 1</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde itaque culpa provident magnam rerum,
                ad aliquid fuga a sed modi adipisci excepturi non qui aspernatur. Est vitae dolores ipsa
                dignissimos.</p>
        </div>
        <div class="gender-content sheet">
            <h2>Content 2</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde itaque culpa provident magnam rerum,
                ad aliquid fuga a sed modi adipisci excepturi non qui aspernatur. Est vitae dolores ipsa
                dignissimos.</p>
        </div>
    </div>
</x-admin-layout>