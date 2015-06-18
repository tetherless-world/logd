#3> <#> a <http://purl.org/twc/vocab/conversion/CSV2RDF4LOD_environment_variables> ;
#3>     rdfs:seeAlso 
#3>     <http://purl.org/twc/page/csv2rdf4lod/distributed_env_vars>,
#3>     <https://github.com/timrdf/csv2rdf4lod-automation/wiki/Script:-source-me.sh> .

export CSV2RDF4LOD_CONVERT_PERSON_URI="http://tw.rpi.edu/instances/TimLebo"
source /home/lebot/prizms/logd/data/source/csv2rdf4lod-source-me-for-prizms.sh
alias prizms='sudo su prizms'
export PATH=$PATH`/home/lebot/opt/prizms/bin/install/paths.sh`
export CLASSPATH=$CLASSPATH`/home/lebot/opt/prizms/bin/install/classpaths.sh`
export CSV2RDF4LOD_HOME="/home/lebot/opt/prizms/repos/csv2rdf4lod-automation"
export DATAFAQS_HOME="/home/lebot/opt/prizms/repos/DataFAQs"
export JENAROOT=/home/lebot/opt/apache-jena-2.13.0
