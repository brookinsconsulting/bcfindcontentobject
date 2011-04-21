{set-block scope=root variable=cache_ttl}0{/set-block}

{if $search_string|ne( '' )}
  <h2>Search content object node id: {$search_string}</h2>
  <hr />
  <a href={concat( 'http://', ezsys( 'hostname' ), '/', $results.url_alias)}>/{$results.url_alias}</a><br />
{/if}
<br />

