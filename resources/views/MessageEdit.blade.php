
		<form action="{{route('msg.update', $infoItem['id'])}}" method="POST">
        {{csrf_field()}}
    	{{ method_field('PATCH') }}

			<div class="col-md-8 mb-3">
				<label for="validationCustom07">Sender_id</label>
				<input value="{{$infoItem['Sender_id']}}" type="number" name="senderID" class="form-control" id="validationCustom07" placeholder="Sender ID" required>
				
			</div>
			<div class="col-md-8 mb-3">
				<label for="validationCustom06">Receiver_id</label>
				<input value="{{$infoItem['Receiver_id']}}" type="number" name="receiverID" class="form-control" id="validationCustom06" placeholder="Receiver ID" required>
				
			</div>
			
			<div class="col-md-8 mb-3">
				<label for="validationCustom07">Messenges</label>
				<input value="{{$infoItem['Messenges']}}" type="text" name="message" class="form-control" id="validationCustom07" placeholder="Messenges" required>
				
			</div>
			<div class="col-md-8 mb-3">
				<label for="validationCustom07">Conversation ID</label>
				<input value="{{$infoItem['Conversations_id']}}" type="text" name="conversationID" class="form-control" id="validationCustom07" placeholder="Conversation ID" required>
				
			</div>
			<div class="col-md-8 mb-3">
				<label for="validationCustom06">Status</label>
				<input value="{{$infoItem['Status']}}" type="number" name="status" min="0" max="1" class="form-control" id="validationCustom06" placeholder="Status" required>
				
			</div>
    
			<div class="col-md-8 mb-3">
			<input type="submit" class="btn btn-outline-primary" value="Edit">
			</div>
			
		</form>
