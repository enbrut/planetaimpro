module LinkHelpers
  def link_to_unless_current target
    trad = t("menu.#{target}")
    lang = I18n.locale
    is_current = current_page.url =~ /\/#{target}/
    
    link_to_with_lang "/#{target}.html", trad, lang, is_current
  end

  def link_to_lang lang
    target = remove_language_code
    trad = t "idioma.#{lang}"
    is_current = lang == I18n.locale
    
    link_to_with_lang target, trad, lang, is_current
  end

  def lang_root_path
    if I18n.default_locale == I18n.locale 
      "/"
    else
      "/#{I18n.locale}/"
    end
  end

  private

  def link_to_with_lang target, trad, lang, is_current
    if is_current
      "<a><span class='active'>#{trad}</span></a>"
    else
      target = "/#{lang}#{target}" if lang != I18n.default_locale
      "<a href='#{target}'><span>#{trad}</span></a>"
    end
  end

  def remove_language_code
    tmp = current_page.path.split("/")
    tmp.shift if tmp.first =~ /^(es|ca)$/
    "/#{tmp.join "/"}"
  end
end
