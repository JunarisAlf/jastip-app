<div id="modal-dialog" class="zoom-anim-dialog display-none">
    <div class="small-dialog-header">
        <h3>{{$name}}</h3>
    </div>
    <div class="content">
        <h5>Quantity</h5>
        <div class="numbers-row">
            <div wire:click="inc" class="inc button_inc">+</div>
            <div wire:click="dec" class="dec button_inc">-</div>
            <input type="number"  class="qty2 form-control" name="qty" wire:model="qty" >
        </div>
    </div>
    <div class="footer">
        <div class="row small-gutters">
        </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close"></button>
</div>