/*
 * LOGIN
 */

function submitForm(ev, type = undefined)
{
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
