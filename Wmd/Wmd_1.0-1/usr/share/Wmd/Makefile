FILES=$(shell ls *.Wmd |sed -e "s/Wmd/html/g")
SED_REPLACER="s/\`\`\`f \(.*\)$$/\`\`\`\{r,cache=TRUE,fig.width=6, fig.height=6, dpi=300,fig.cap=\"Figure:  \\1\"\}/g"

all: $(FILES)
	
%.Rmd : %.Wmd
    
	cat $< |sed -e ${SED_REPLACER} | php /usr/share/Wmd/tweet.php > $@
%.md : %.Rmd
	# --no-save -q
	echo "library(knitr);knitr::opts_chunk\$$set(fig.path='figures/"`echo $<  |cut -d"." -f1`"-');knit(\""$<"\");" > WmdBuilder.R
ifeq ($(ROPTS),--interactive)
	echo "You should now source(\"WmdBuilder.R\")". Remember to exit gracefully
	R -q --no-save --interactive
else
	Rscript WmdBuilder.R ${ROPTS}
endif
	rm -f WmdBuilder.R
%.html : %.md
	pandoc -s $< -t html5 -o $@
%.pdf : %.md
	pandoc $< -t latex -o $@
clean:
	rm cache -Rf
	rm figures -Rf;
	rm -f *.html *.md *.Rmd
