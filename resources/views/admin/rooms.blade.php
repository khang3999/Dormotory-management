<x-admin-layout>
    <x-slot:title>
        Quản lí phòng
    </x-slot:title>
    <div class="bang bangquanlyphong " id="quanLyPhong">
        <div class="tableName">Quản lý phòng</div>
        <div class="row py-2">
            <div class="col-8">
                <div class="checkbox-group">
                    <label for="checkbox1">
                        <input class="check" type="checkbox" id="checkbox1" name="options" value="Option 1" />
                        Phòng còn trống
                    </label>
                    <label for="checkbox2">
                        <input class="check" type="checkbox" id="checkbox2" name="options" value="Option 2" />
                        Phòng đầy
                    </label>
                    <label for="checkbox3">
                        <input class="check" type="checkbox" id="checkbox2" name="options" value="Option 2" />
                        Phòng đang hư
                    </label>
                </div>
            </div>
            <div class="col-4">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary" data-mdb-ripple-init>search</button>
                </div>
            </div>
            <div class="row">
                {{-- Phòng  --}}
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                 <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                 <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>

                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                 <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>
                <div class="col-2">
                    <div class="room">
                        <div class="room-name">
                            001
                        </div>
                        <div class="room-infor row">
                            <div class="styleComponentOfRoom col-4 py-1">nu</div>
                            <div class="styleComponentOfRoom col-4 py-1">13/15</div>
                            <div class="styleComponentOfRoom col-4 py-1"> tot</div>
                        </div>
                        <div class="room-button row">
                            <i class="styleComponentOfRoom col-4 bi bi-app"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-eye" data-toggle="modal"
                                data-target="#exampleModal"></i>
                            <i class="styleComponentOfRoom col-4 bi bi-trash"></i>
                        </div>

                    </div>
                </div>

                
            </div>
        </div>
        <div class="groupbutton">
            <button class="btn-file">Xuất file</button>
            <button class="btn-file">Nhập file</button>
        </div>
    </div>
</x-admin-layout>
