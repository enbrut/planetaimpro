module LinkHelpers
  def link_to_unless_current target
    trad = t("menu.#{target}")
    if current_page.url =~ /\/#{target}/
      "<a><span class='active'>#{trad}</span></a>"
    else
      "<li><a href='#{target}.html'><span>#{trad}</span></a></li>"
    end
  end
end
