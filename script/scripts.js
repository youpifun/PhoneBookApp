function createContactBlock (data) {
	var contactBlock = document.createElement('div');
	contactBlock.classList.add('contacts-list__contact');
	contactBlock.innerHTML = data['NAME'] + 
					' <a class="cross" href="#" name="'+ data['ID'] + '">&#x2716;</a> <br/>'
					+ '<span class="number">'+ data['PHONE_NUMBER'] +'<span>';
	return contactBlock;
}

$(document).ready(function() {
        $.ajax({
            type: "POST",
            url: '../php/getContacts.php',
            success: function(response)
            {
                var contactsInfoArray = JSON.parse(response);
				var contactsList = document.querySelector('.contacts-list');
				for (var i = 0; i<contactsInfoArray.length; i++) {
					contactsList.appendChild(createContactBlock(contactsInfoArray[i]));
				}
           }
       });
});

$(document).on("click", ".cross", function(e) { 
	e.preventDefault();
    var thisparam = $(this); 
    $.ajax({ 
        type: 'POST', 
		data: {id: e.target.getAttribute('name')},
        url: '../php/deleteContact.php', 
         
        success: function(results){ 
            thisparam.parent().fadeOut('slow'); 
        }
    }) 
    return false; 
});