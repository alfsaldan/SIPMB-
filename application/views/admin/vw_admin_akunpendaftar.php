<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">

            <!-- Card Border Shadow -->
            <div class="row">
                <h4 class="py-3 mb-4">
                    <span class="text-muted fw-light">General /</span>
                    <?php echo $judul; ?>
                </h4>

                <!-- Bootstrap Table with Caption -->
                <div class="card p-2">
                    <div class="d-flex justify-content-between align-items-center w-full">
                        <h5 class="card-header">Table Manajemen Akun Pendaftar</h5>
                        <button type="button" class="btn btn-success">
                            <span class="mdi mdi-plus me-sm-1"></span>Tambah
                        </button>
                    </div>
                    <div class="h-4 d-flex justify-content-end ">
                        <div class="w-25 ">
                            <span class="me-2">Search:</span>
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-hover">
                            <caption class="ms-4">
                                Akun Pendaftar
                            </caption>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No Pendaftar</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>HP</th>
                                    <th>Jenis Pendaftar</th>
                                    <th>Action</th>


                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0" id="tableContainer">

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Bootstrap Table with Caption -->

            </div>
        </div>
    </div>
</div>


<script>
const pendaftar = [{
        nomor: 1,
        nopendaftar: "2455",
        nama: "Athira Putri Tilani",
        email: "athira@gmail.com",
        hp: "0836373623",
        jenis: "PSUD",


    },
    {
        nomor: 2,
        nopendaftar: "2456",
        nama: "Syahriza Bayu Pratama",
        email: "athira@gmail.com",
        hp: "0836373623",
        jenis: "PSUD",


    },
    {
        nomor: 3,
        nopendaftar: "2455",
        nama: "Alfi Fikri Putra Saldan",
        email: "athira@gmail.com",
        hp: "0836373623",
        jenis: "PSUD",


    },
    {
        nomor: 4,
        nopendaftar: "2455",
        nama: "Windri Elda",
        email: "athira@gmail.com",
        hp: "0836373623",
        jenis: "PSUD",


    }
]


const tableContainer = document.getElementById('tableContainer');

pendaftar.forEach(data => {
    tableContainer.innerHTML += getData(data);
})



function getData(data) {
    return `
   
    <tr>
    <td>
        <span
            class="fw-medium">${data.nomor}</span>
    </td>
    <td>${data.nopendaftar}</td>
    <td>${data.nama}</td>
    <td>${data.email}</td>
    <td>${data.hp}</td>
    <td><span class="badge rounded-pill bg-label-primary me-1">${data.jenis}</span></td>
    
    <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="mdi mdi-pencil-outline me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="mdi mdi-trash-can-outline me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
    </tr>   
    
    
    `
}
</script>