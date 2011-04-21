{set-block scope=root variable=cache_ttl}0{/set-block}

<h1>Find Content Objects</h1>

<form name="findcontentobject" method="get" action="/find/search/">

Search by any of the following fields<br />

<div>
Content Object Name: <input type="text" name="cname" value="{ezhttp( 'cname', 'get' )}" size="12" /> <br />

User Name: <input type="text" name="name" value="{ezhttp( 'name', 'get' )}" size="12" /> <br />

User Email: <input type="text" name="email" value="{ezhttp( 'email', 'get' )}" size="12" /> <br />

Object ID: <input type="text" name="coid" value="{ezhttp( 'coid', 'get' )}" size="12" /> <br />

Node ID: <input type="text" name="conid" value="{ezhttp( 'conid', 'get' )}" size="12" /> <br />
<br />

  <input type="submit" name="Submit" value="Search" />
  <input type="button" name="reset_form_values" value="Reset" onClick="this.form.reset(); document.findcontentobject.name.value=''; document.findcontentobject.email.value=''; document.findcontentobject.coid.value=''; document.findcontentobject.conid.value=''; " />
</div>

<hr />
<br />

</form>

