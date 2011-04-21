
{set-block scope=root variable=cache_ttl}0{/set-block}

{if $search_string|ne( '' )}
  <h2>Search email string: {$search_string}</h2>
  <hr />

  {def $results_specific=$results.result}
  {foreach $results_specific as $res}
     <a href={concat( 'http://', ezsys( 'hostname' ), '/', $res.url_alias)}>/{$res.url_alias}</a><br />
  {/foreach}
{/if}
<br />

