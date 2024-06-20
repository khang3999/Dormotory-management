<x-admin-layout>
    <x-slot:title>
        Quản lí sinh viên
    </x-slot:title>

    <div class="bang" id="sinhVien">
        <div class="tableName">Sinh viên trong kí túc xá</div>
        <div class="row py-2">
            <div class="col-8">
                <div class="checkbox-group">
                    <label for="checkbox1">
                        <input class="check" type="checkbox" id="checkbox1" name="options" value="Option 1" />
                        Giới tính nam
                    </label>
                    <label for="checkbox2">
                        <input class="check" type="checkbox" id="checkbox2" name="options" value="Option 2" />
                        Giới tính nữ
                    </label>
                    <label for="checkbox3">
                        <input class="check" type="checkbox" id="checkbox2" name="options" value="Option 2" />
                        Trường hợp ưu tiên
                    </label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>
                        search
                    </button>
                </div>
            </div>
        </div>

        <div class="table-responsive bang-noi-dung">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-12">ID</th>
                        <th scope="col" class="text-12">Tên</th>
                        <th scope="col" class="text-12">MSSV</th>
                        <th scope="col" class="text-12">Email</th>
                        <th scope="col" class="text-12">Giới tính</th>
                        <th scope="col" class="text-12">Phone</th>
                        <th scope="col" class="text-12">CCCD</th>
                        <th scope="col" class="text-12">Ngày Sinh</th>
                        <th scope="col" class="text-12">Quê Quán</th>
                        <th scope="col" class="text-12">Dân Tộc</th>
                        <th scope="col" class="text-12">Ghi Chú</th>
                        <th scope="col" class="text-12">Thời Gian</th>
                        <th scope="col" class="text-12">Công Cụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-10">1</td>
                        <td class="text-10">Nguyen Van Du</td>
                        <td class="text-10">22211TT1357</td>
                        <td class="text-10">vandupluss@gmail.com</td>
                        <td class="text-10">nam</td>
                        <td class="text-10">1234567890</td>
                        <td class="text-10">111111111111</td>
                        <td class="text-10">28/01/2004</td>
                        <td class="text-10">An Giang</td>
                        <td class="text-10">Kinh</td>
                        <td class="text-10 text-limit">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Dolores ipsam deserunt harum incidunt, officiis quo eaque
                            qui! Nemo unde ducimus reiciendis, quisquam beatae odit,
                            totam accusamus enim ipsa suscipit error! Lcing eunt eque
                            suscipit deserunt.
                        </td>
                        <td class="text-10">1 nam</td>
                        <td class="text-15">
                            <i class="bi bi-app"></i>
                            <i class="bi bi-eye" data-toggle="modal" data-target="#exampleModal"></i>
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="groupbutton">
            <button class="btn-file">Xuất file</button>
            <button class="btn-file">Nhập file</button>
        </div>
    </div>
</x-admin-layout>