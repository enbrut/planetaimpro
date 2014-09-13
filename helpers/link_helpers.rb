module LinkHelpers
  def link_to_unless_current target
    trad = t("menu.#{target}")
    if current_page.url =~ /\/#{target}/
      "<a><span class='active'>#{trad}</span></a>"
    else
      "<a href='#{target}.html'><span>#{trad}</span></a>"
    end
  end

  def link_to_lang lang
    target = "/#{current_page.path.split("/").last}"
    trad = t "idioma.#{lang}"
    if lang == I18n.locale
      "<a><span class='active'>#{trad}</span></a>"
    else
      target = "/#{lang}#{target}" if lang != I18n.default_locale
      "<a href='#{target}'><span>#{trad}</span></a>"
    end
  end
end
