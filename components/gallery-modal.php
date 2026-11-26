<?php
/** Image viewer for gallery items (buttons with data-bs-target="#galleryModal"). */
?>
    <div class="modal fade gallery-modal" id="galleryModal" tabindex="-1" aria-label="Image preview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="" alt="" id="galleryModalImg">
                <p class="gallery-modal__caption" id="galleryModalCaption"></p>
            </div>
        </div>
    </div>
