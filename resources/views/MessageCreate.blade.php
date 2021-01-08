
<!-- </div>
<div class="form-row"> -->
<form action="{{route('msg.store')}}" method="POST">
{{csrf_field()}}
<div class="col-md-8 mb-3">
        <label for="validationCustom07">Sender_id</label>
        <input type="number" name="senderID" class="form-control" id="validationCustom07" placeholder="Sender ID" required>
        
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom06">Receiver_id</label>
        <input type="number" name="receiverID" class="form-control" id="validationCustom06" placeholder="Receiver ID" required>
        
    </div>
    
    <div class="col-md-8 mb-3">
        <label for="validationCustom07">Messenges</label>
        <input type="text" name="message" class="form-control" id="validationCustom07" placeholder="Messenges" required>
        
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom06">Status</label>
        <input type="number" name="status" min="0" max="1" class="form-control" id="validationCustom06" placeholder="Status" required>
        
    </div>
    
    <div class="col-md-8 mb-3">
        <button type="submit" class="btn btn-outline-primary">Create</button></a>
        
    </div>
</form>

