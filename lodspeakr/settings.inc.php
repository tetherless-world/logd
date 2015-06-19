<?php

$conf['endpoint']['local'] = 'http://logd.tw.rpi.edu/sparql';
$conf['home'] = '/var/www/lodspeakr/';
$conf['basedir'] = 'http://logd.tw.rpi.edu/';
$conf['debug'] = false;

$conf['ns']['local']   = 'http://logd.tw.rpi.edu';


$conf['mirror_external_uris'] = false;

// Cherry-picked components (see https://github.com/alangrafu/lodspeakr/wiki/Reuse-cherry-picked-components-from-other-repositories)
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/csv2rdf4lod-lodspeakr/components/services/named-graph-loads';
$conf['components']['types'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/types/conv:AbstractDataset';
$conf['components']['types'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/types/void:Dataset';
$conf['components']['types'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/types/conv:VersionedDataset';
$conf['components']['types'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/types/rdfs:Resource';
$conf['components']['types'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/types/conv:LayerDataset';
$conf['components']['types'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/types/conv:MetaDataset';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/sanity-checks';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/triples';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/dataset-sample-graphs';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/ckan-mirror-status';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/search';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/instances';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/vocabularies';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/statistics';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/graph';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/datasets';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/classes';
$conf['components']['services'][] = '/data/home/prizms/opt/prizms/lodspeakrs/prizms-lodspeakr/components/services/namedGraphs';

// Variables in  can be used to store user info.
// For examples, 'title' will be used in the header.
// (You can forget about all conventions and use your own as well)
$lodspk['title'] = 'LODSPeaKr';
?>
