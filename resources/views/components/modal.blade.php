<div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content p-3">
                {{-- <div class="w-100 d-flex align-items-center justify-content-end">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> --}}
                <div class="modal-body">
                    <div class="">
                        {{ $image }}
                    </div>
                    <div class="">
                        <h1 class="fs-2 fw-3">Calificación del cuestionario</h1>
                        {{ $description }}
                    </div>
                </div>
                <div class="modal-footer d-flex aling-items-center justify-content-center">
                    <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>

    </div>
</div>
