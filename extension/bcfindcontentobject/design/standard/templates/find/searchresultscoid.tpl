{set-block scope=root variable=cache_ttl}0{/set-block}

{if $search_string|ne( '' )}
  <h2>Search content object id: {$search_string}</h2>
  <hr />
  <a href={concat( 'http://', ezsys( 'hostname' ), '/', $results.main_node.url_alias)}>/{$results.main_node.url_alias}</a><br />
{/if}
<br />

