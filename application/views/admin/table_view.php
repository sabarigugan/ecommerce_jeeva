<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0"><?= ucwords($page_name); ?></h1>
            </div>
        </div>
        <!--//row-->
        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class = "container">
                            <table class="table app-table-hover mb-0 text-left" id="dataTable">
                                <thead>
                                    <tr>
                                        <?php foreach($table_columns as $table_column){ ?>
                                            <th class="cell"><?= $table_column; ?></th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!--//app-card-body-->
                </div>
            </div>
            <!--//tab-pane-->
            <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
