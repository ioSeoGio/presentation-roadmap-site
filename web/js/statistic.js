window.onload = function(){
	let items = $(".item-length");
	let full_length = 100;

    for(let i = 0; i < items.length; i++)
    {
    	let el_perc = $(items[i]).attr("data-length");
    	let new_length = full_length * el_perc / 100 + "%";
    	// console.log(new_length);

    	$(items[i]).width(new_length);
    }
}
