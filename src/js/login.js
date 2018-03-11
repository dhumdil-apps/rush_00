/*
 * LOGIN
 */

function submitForm(ev, type = undefined, url = undefined, id = undefined)
{
	if (url != undefined)
	{
		document.getElementById('url').value = url;
	}
	if (id != undefined)
	{
		document.getElementById('id').value = id;
	}
	if (type == 'keyboard')
	{
		if (ev.keyCode == 13 || ev.which == 13)
		{
			document.getElementById('form').submit();
		}
	}
	else if (type == 'mouse')
	{
		document.getElementById('form').submit();
	}
	else
	{
		ev.preventDefault();
	}
}

function logoutFormSubmit(ev)
{
	document.getElementById('logout-form').submit();
}
